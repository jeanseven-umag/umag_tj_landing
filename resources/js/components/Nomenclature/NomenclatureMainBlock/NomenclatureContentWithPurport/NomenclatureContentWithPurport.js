import { Accordion, Flex, Text } from "@mantine/core";
import contentArrow from "../../../../../../public/img/knowledge-img/nomenclature-content-arrow.png";

export const NomenclatureContentWithPurport = ({ data, refs, value, setValue }) => {
  return (
    <Flex>
      <Accordion
        className="w-100"
        chevron={
          <img className="nomenclature-content-arrow" src={contentArrow} />
        }
        value={value}
        multiple
        onChange={setValue}
        styles={{
          item: {
            marginBottom: "10px",
          },
          chevron: {
            padding: '0 30px'
          }
        }}
      >
        {data?.map((item, index) => (
          <div
            key={`accordion-item-${index}`}
            ref={(el) => (refs.current[`item-${index}`] = el)}
          >
            <Accordion.Item value={`item-${index}`}>
              <Accordion.Control className="bg-light-blue">
                <div className="container w-100">
                  <Text
                    className="nomenclature-content-caption"
                    style={{
                      fontSize: "20px",
                      fontWeight: 600,
                      lineHeight: "30px",
                      color: "#3D3B40",
                    }}
                  >
                    {item?.title}
                  </Text>
                </div>
              </Accordion.Control>
              <Accordion.Panel>
                <div className="container w-100">
                  <Flex direction="column" gap={20}>
                    <div className="nomenclature-content-font" dangerouslySetInnerHTML={{ __html: item.content }} />
                  </Flex>
                </div>
              </Accordion.Panel>
            </Accordion.Item>
          </div>
        ))}
      </Accordion>
    </Flex>
  );
};
